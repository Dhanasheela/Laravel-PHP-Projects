@extends('layouts.app')
@section('content')
<div class="roles-permissions">
    <div class="flex items-center justify-between mb-6">
        <div>
            <h2 class="text-gray-700 uppercase font-bold">Exam Details</h2>
        </div>
        <div class="flex flex-wrap items-center">
            <a href="{{ url('exam/create') }}" class="bg-gray-200 text-gray-700 text-sm uppercase py-2 px-4 flex items-center rounded">
                <svg class="w-3 h-3 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="svg-inline--fa fa-plus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                </svg>
                <span class="ml-2 text-xs fodnt-semibold">Exam Schedule</span>
            </a>
        </div>
    </div>
    <?php
    // dd($examData);
    // die;
    ?>
    <div class="row">

        <div class="col-md-4">Grade : {{$examData->grade_id}}</div>
        <div class="col-md-4">Subject : {{$examData->name}}</div>
        <div class="col-md-4">Subject Code: {{$examData->subject_code}}</div>
    </div>
    <div class="row">
        <div class="col-md-4">Exam Date:{{$examData->exam_date}}</div>
        <div class="col-md-4">Total Marks:{{$examData->total_marks}}</div>
        <div class="col-md-4">Pass Marks:{{$examData->pass_marks}}</div>
    </div>
    <table class="mt-8 bg-white rounded border-b-4 border-gray-300 table table-striped table-bordered">
        <thead>
            <tr>
                <th class="w-1/12 px-4 py-2">ID</th>
                <th class="w-1/12 px-4 py-2">Student Name</th>
                <th class="w-1/12 px-4 py-3">Marks</th>
                <th class="w-1/12 px-4 py-2">Action</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($stuData))
            <form method="post">
                @foreach ($stuData as $exam)
                <tr>
                    <td class="w-1/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{$exam->id}}</td>
                    <td class="w-1/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{$exam->name}}</td>
                    <td class="w-1/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">
                        <input type="text" class="form-control" style="background:#dfe6eb;" name="marks[{{$exam->id}}]">
                    </td>
                    <td class="w-1/12 text-sm items-center justify-end px-3">
                        <a href="{{ route('student.edit',$exam->id) }}" class="ml-1">
                            <svg class="h-6 fill-current text-gray-600" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen-square" class="svg-inline--fa fa-pen-square fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path fill="currentColor" d="M400 480H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48v352c0 26.5-21.5 48-48 48zM238.1 177.9L102.4 313.6l-6.3 57.1c-.8 7.6 5.6 14.1 13.3 13.3l57.1-6.3L302.2 242c2.3-2.3 2.3-6.1 0-8.5L246.7 178c-2.5-2.4-6.3-2.4-8.6-.1zM345 165.1L314.9 135c-9.4-9.4-24.6-9.4-33.9 0l-23.1 23.1c-2.3 2.3-2.3 6.1 0 8.5l55.5 55.5c2.3 2.3 6.1 2.3 8.5 0L345 199c9.3-9.3 9.3-24.5 0-33.9z"></path>
                            </svg>
                        </a>
                    </td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="2">
                        <button class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">Save</button>
                    </td>
                    <td colspan="4"></td>
                </tr>
            </form>
            @endif
        </tbody>
    </table>
</div>
@endsection