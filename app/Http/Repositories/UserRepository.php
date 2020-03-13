<?php


namespace App\Http\Repositories;

use App\User;
use SocialiteProviders\Manager\OAuth2\User as UserOAuth;
use Laravel\Socialite\Two\User as GithubUser;
class UserRepository
{
    public function getUserBySocId($user, string $socName) {
        $userInSystem = User::query()
            ->where('id_in_soc', $user->id)
            ->where('type_auth', $socName)
            ->first();
        if(empty($userInSystem)) {
            $userInSystem = New User();
            $userInSystem->fill([
                'name' => !empty($user->getName()) ? $user->getName() : $user->getNickname(),
                'email' => !empty($user->getEmail()) ? $user->getEmail() : '',
                'password' => '',
                'type_auth' => $socName,
                'id_in_soc' => !empty($user->getId()) ? $user->getId() : '',
                'avatar' => !empty($user->getAvatar()) ? $user->getAvatar() : ''
            ]);
            $userInSystem->save();
        }

        return $userInSystem;
    }
}
