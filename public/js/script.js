const deleteTask = async (e) => {
    let id = e.target.getAttribute('data-id');
    try {

        await fetch(`/tasks/${id}`, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.getElementsByName('csrf-token')[0].getAttribute('content'),
            },
        }).then(response => response.json()).then((response) => {
            if(response.status === true) {
                window.location.reload();
            }
        });
    } catch (error) {
        console.error('Error:', error);
    }
};
const completeHandler = async (e) => {
    let id = e.target.getAttribute('data-id');
    try {

        await fetch(`/tasks/${id}`, {
            method: 'PATCH',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.getElementsByName('csrf-token')[0].getAttribute('content'),
            },
        }).then(response => response.json()).then((response) => {
            if(response.status === true) {
                window.location.reload();
            }
        });
    } catch (error) {
        console.error('Error:', error);
    }
};
const saveHandler = async () => {
    try {
        await fetch(`/tasks`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.getElementsByName('csrf-token')[0].getAttribute('content'),
            },
            body: JSON.stringify({
                title: document.getElementById("new-task-title").value,
                status: document.getElementById("new-task-status").value,
            })
        }).then(response => response.json()).then((response) => {
            if(response.status === false) {
                document.getElementsByClassName("error-block")[0].innerHTML = `<div class="error">${response.error}</div>`;
            } else {
                window.location.href = response.redirect;
            }
        });
    } catch (error) {
        console.error('Error:', error);
    }
};

// Initialize event listeners
const initEventListeners = () => {
    document.querySelectorAll('.task-block').forEach(task => {
        task.querySelector('.delete-button').addEventListener('click', deleteTask);
        task.querySelector('.complete-checkbox').addEventListener('click', completeHandler);
    });

    const saveButton = document.getElementById('save-button');
    if (saveButton) {
        saveButton.addEventListener('click', saveHandler);
    }
};

// Initialize
document.addEventListener('DOMContentLoaded', initEventListeners);
