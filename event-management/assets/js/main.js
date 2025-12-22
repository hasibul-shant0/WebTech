// assets/js/main.js
$(document).ready(function(){
    function loadEvents(){
        $.ajax({
            url: 'ajax/eventActions.php',
            method: 'GET',
            data: { action: 'fetch_events' },
            success: function(res){
                try {
                    const data = JSON.parse(res);
                    if (data.events && data.events.length) {
                        let html = '';
                        data.events.forEach(e => {
                            html += `<div class="event-card">
                                        <div class="event-title">${e.title}</div>
                                        <div>${e.event_date} ${e.event_time}</div>
                                        <div>${e.location}</div>
                                        <p>${e.description ? e.description.substring(0,120) + '...' : ''}</p>
                                        <button class="registerBtn" data-id="${e.id}">Register</button>
                                     </div>`;
                        });
                        $('#eventsList').html(html);
                    } else {
                        $('#eventsList').html('<p>No events found.</p>');
                    }
                } catch(err) {
                    $('#eventsList').html('<p>Error loading events.</p>');
                }
            },
            error: function(){
                $('#eventsList').html('<p>AJAX error.</p>');
            }
        });
    }
    loadEvents();

    // Delegated event handler for register
    $(document).on('click', '.registerBtn', function(){
        const id = $(this).data('id');
        // In a full app, check login; for demo we call register endpoint which expects session user
        $.post('ajax/registrationActions.php', { action: 'register', event_id: id }, function(res){
            try {
                const data = JSON.parse(res);
                alert(data.message || 'Response received');
            } catch(e) {
                alert('Unexpected response');
            }
        });
    });
});
