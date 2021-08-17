@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-dark text-white ">{{ __('Comercial') }}</div>

                    <div class="card-body">
                        <div class="row">
                            @switch(Auth::user()->user_type_id)
                                @case(1)
                                    <div class="col-md-12 col-lg-12">
                                        <iframe height="373.5"
                                            src="https://app.powerbi.com/view?r=eyJrIjoiNzNmOWE2ODAtYzU4NS00Y2E5LWIyMDgtMTg1YmU5ZDZjMDlmIiwidCI6IjdiZDI5MmI5LWQ3MmQtNDdiOS05NTYwLTIxYTg2ZjhmNWJjMCJ9"
                                            frameborder="0" allowFullScreen="true"></iframe>
                                    </div>
                                    <div class="col-md-12 col-lg-6">
                                        <iframe width="600" height="373.5"
                                            src="https://app.powerbi.com/view?r=eyJrIjoiNzI1MTg0MDctMjAxZC00YjI2LTkyYzQtZjZiY2U5YzdhYjU1IiwidCI6IjdiZDI5MmI5LWQ3MmQtNDdiOS05NTYwLTIxYTg2ZjhmNWJjMCJ9"
                                            frameborder="0" allowFullScreen="true"></iframe>
                                    </div>
                                    <div class="col-md-12 col-lg-6">
                                        <iframe width="600" height="373.5"
                                            src="https://app.powerbi.com/view?r=eyJrIjoiODY5YmUwNTgtZmFiNS00MTAwLTg5MTQtNWZhZDM1MTJmOWI4IiwidCI6IjdiZDI5MmI5LWQ3MmQtNDdiOS05NTYwLTIxYTg2ZjhmNWJjMCJ9"
                                            frameborder="0" allowFullScreen="true"></iframe>
                                    </div>
                                @break
                                @case(2)
                                    <div class="col-12">
                                        <iframe width="600" height="373.5"
                                            src="https://app.powerbi.com/view?r=eyJrIjoiNzNmOWE2ODAtYzU4NS00Y2E5LWIyMDgtMTg1YmU5ZDZjMDlmIiwidCI6IjdiZDI5MmI5LWQ3MmQtNDdiOS05NTYwLTIxYTg2ZjhmNWJjMCJ9"
                                            frameborder="0" allowFullScreen="true"></iframe>
                                    </div>
                                @break
                                @case(3)
                                    <div class="col-12">
                                        <iframe width="600" height="373.5"
                                            src="https://app.powerbi.com/view?r=eyJrIjoiNzI1MTg0MDctMjAxZC00YjI2LTkyYzQtZjZiY2U5YzdhYjU1IiwidCI6IjdiZDI5MmI5LWQ3MmQtNDdiOS05NTYwLTIxYTg2ZjhmNWJjMCJ9"
                                            frameborder="0" allowFullScreen="true"></iframe>
                                    </div>
                                @break
                                @case(4)
                                    <div class="col-12">
                                        <iframe width="600" height="373.5"
                                            src="https://app.powerbi.com/view?r=eyJrIjoiODY5YmUwNTgtZmFiNS00MTAwLTg5MTQtNWZhZDM1MTJmOWI4IiwidCI6IjdiZDI5MmI5LWQ3MmQtNDdiOS05NTYwLTIxYTg2ZjhmNWJjMCJ9"
                                            frameborder="0" allowFullScreen="true"></iframe>
                                    </div>
                                @break
                            @endswitch
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
