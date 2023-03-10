<div>
    <div id='calendar-container' wire:ignore>
        <div id='calendar'></div>
    </div>
</div>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <script>
        create_UUID = () => {
            let dt = new Date().getTime();
            const uuid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, c => {
                let r = (dt + Math.random() * 16) % 16 | 0;
                dt = Math.floor(dt / 16);
                return (c == 'x' ? r : (r & 0x3 | 0x8)).toString(16);
            });
            return uuid;
        }
        document.addEventListener('livewire:load', function() {
            const Calendar = FullCalendar.Calendar;
            const calendarEl = document.getElementById('calendar');
            const calendar = new Calendar(calendarEl, {
                initialView: 'timeGridWeek',
                slotMinTime: '8:00:00',
                slotMaxTime: '19:00:00',
                titleFormat: { year: 'numeric', month: 'long', day: '2-digit' },
                events: JSON.parse(@this.events),

                selectable: true,
                select: arg => {
                    const title = prompt('Phone number:');
                    const id = create_UUID();
                    if (title) {
                        calendar.addEvent({
                            id: id,
                            title: title,
                            start: arg.start,
                            end: arg.end,
                            allDay: arg.allDay
                        });
                        @this.eventAdd(calendar.getEventById(id));
                    };
                    calendar.unselect();
                },
            });
            calendar.render();
        });
    </script>
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css' rel='stylesheet' />
@endpush
