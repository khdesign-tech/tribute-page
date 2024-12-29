document.addEventListener('DOMContentLoaded', function () {
    const postForm = document.getElementById('post-form');
    const postContent = document.getElementById('post-content');
    const userName = document.getElementById('user-name');
    const postFeed = document.getElementById('post-feed');

    postForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const content = postContent.value;
        const name = userName.value;

        if (content.trim() !== '') {
            // In a real-world scenario, you'd send this data to the server for processing.
            // For simplicity, we'll just use a placeholder for the AJAX request.
            // Update the URL to the actual endpoint on your server.
            const url = 'post.php';

            // Create a FormData object to send form data
            const formData = new FormData();
            formData.append('user_name', name);
            formData.append('post_content', content);

            // Placeholder for the actual AJAX request
            // Use fetch or XMLHttpRequest for the actual implementation
            fetch(url, {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                // Display success message
                alert(data);

                // Clear the textarea after posting
                postContent.value = '';
                
                // Refresh the post feed (you might want to update this part based on your real application)
                postFeed.innerHTML = '';
                fetch('get_posts.php')
                    .then(response => response.text())
                    .then(data => {
                        postFeed.innerHTML = data;
                    })
                    .catch(error => console.error('Error fetching posts:', error));
            })
            .catch(error => console.error('Error posting:', error));
        }
    });
});
