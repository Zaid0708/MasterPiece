@extends('layout.instructorlayout')
@section('instructor')
    <div class="tpd-content-layout">
        <div class="mb-4">
            <form action="{{ route('instructor.topics') }}" method="GET">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by course title">
              
                <button class="btn btn-primary" type="submit">Search</button>
           
            </form>
        </div>
        <!-- dashboard-tab-area -->
        <div class="dashboader-area mb-30">
            <div style="display: flex;justify-content:space-around" class="tp-dashboard-tab">
                <h2 style="width: fit-content" class="tp-dashboard-tab-title">Course Topics</h2>
           
                <a style="height: fit-content;margin-top:2%" class="btn btn-primary" href="{{route('topic-form')}}">add topic</a>
         
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="tpd-table tpd-announcement-table mb-45">
                    <ul>
                        <li class="tpd-table-head">
                            <div class="tpd-table-row">
                                <div class="tpd-announcement-date">
                                    <h4 class="tpd-table-title">Course name</h4>
                                </div>
                                <div class="tpd-announcement-announcement">
                                    <h4 class="tpd-table-title">Topic title</h4>
                                </div>
                                <div class="tpd-announcement-announcement">
                                    <h4 class="tpd-table-title">Topic order</h4>
                                </div>
                            </div>
                        </li>
                        @foreach ($courses as $course)
                            @if ($course->topics->isEmpty())
                                <li>
                                    <div class="tpd-table-row">
                                        <div class="tpd-announcement-date">
                                            <h4 class="tpd-common-text">{{$course->title}}</h4>
                                        </div>
                                        <div class="tpd-announcement-announcement">
                                            <h4 class="tpd-common-text">No topics available</h4>
                                        </div>
                                        <div class="tpd-announcement-announcement">
                                            <h4 class="tpd-common-text">-</h4>
                                        </div>
                                    </div>
                                </li>
                            @else
                                @foreach ($course->topics as $topic)
                                    <li>
                                        <div class="tpd-table-row">
                                            <div class="tpd-announcement-date">
                                                <h4 class="tpd-common-text">{{$course->title}}</h4>
                                            </div>
                                            <div class="tpd-announcement-announcement">
                                                <h4 class="tpd-common-text">{{$topic->title}}</h4>
                                            </div>
                                            <div class="tpd-announcement-announcement">
                                                <h4 class="tpd-common-text">{{$topic->order}}</h4>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop
