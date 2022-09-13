@extends('layouts.app')
@section('content')
<div class="roles-permissions">
    <div class="flex items-center justify-between mb-6">
        <div>
            <h2 class="text-gray-700 uppercase font-bold">EXam schedule List</h2>
        </div>
        <div class="flex flex-wrap items-center">
            <a href="{{ url('exam/marks') }}" class="bg-gray-200 text-gray-700 text-sm uppercase py-2 px-4 flex items-center rounded">
                <svg class="w-3 h-3 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="svg-inline--fa fa-plus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                </svg>
                <span class="ml-2 text-xs font-semibold">ADD Student Marks</span>
            </a>
        </div>
    </div>
    <table id="example" class="mt-8 bg-white rounded border-b-4 border-gray-300 table table-striped table-bordered">
        <thead>
            <tr>
                <th class="w-1/12 px-4 py-3">#</th>
                <th class="w-1/12 px-4 py-3">Student</th>
                <th class="w-1/12 px-4 py-3">Exam_Schedule</th>
                <th class="w-1/12 px-4 py-3">Total Marks</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // echo "<pre>";
            // dd($name);
            // die;
            ?>
            @foreach ($schedule as $exam)
            <tr>
                <td class="w-1/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{$exam->id}}</td>
                <td class="w-1/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{$exam->name}}</td>
                <td class="w-1/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{$exam->date}}</td>
                <td class="w-1/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{$exam->total_marks}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection