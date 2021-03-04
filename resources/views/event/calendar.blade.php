@extends('layout.template')

@section('page-header-title', 'Menu Kalender')
@section('tab_menu', 'Event')
@section('sub_tab_menu', 'Kalender')
@section('tab_name', 'Menu Kalender')

@section('content')
    <!-- simple calendar -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <button class="btn btn-sm btn-space btn-light text-right" data-toggle="modal" data-target="#calendar_add">Add event</button>
                    </div>
                    <br>
                    <div id='calendar1'></div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end simple calendar -->
    @include('event.add_modal')

    <script>
        $(document).ready(function() {

            $('#calendar1').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay,listWeek'
                },
                // defaultDate: '2018-03-12',
                // navLinks: true, // can click day/week names to navigate views
                // editable: true,
                eventLimit: true, // allow "more" link when too many events
                events: [
                    @foreach ($data as $item) {
                        id    : "{{$item->id}}",
                        title : "{{$item->title}}",
                        start : "{{$item->start_date}}",
                        end   : "{{$item->end_date}}",
                        start_date : "{{$item->start_date}}",
                        end_date   : "{{$item->end_date}}",
                        description : "{{$item->description}}"
                    },
                    @endforeach
                ],
                eventClick: function(info) {

                    // var eventObj = info;

                    console.log(info.id)
                }
            });

        });
    </script>
@endsection
