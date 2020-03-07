window.onload = () => {
    document.querySelector('.news')
        .addEventListener('click', event => {
            if (!event.target.classList.contains('delete-btn')) {
                return
            }

            const userId = event.target.dataset.id;
            const token = event.target.dataset.token;

            (async () => {
                const response = await fetch(`admin/users/${userId}/destroy`, {
                    method: 'DELETE',
                    data: {
                        _token: token
                    }
                });

                const data = response.json();

                if (data) {
                    console.log(data)
                }
            })();

        })
};
