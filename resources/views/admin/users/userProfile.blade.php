@extends('admin.layout.master')

@section('title', 'User Profile')

@section('content')
    <div class="container bootstrap snippets bootdey">
        <div class="panel-body inf-content" style="border: 1px solid #DDDDDD;box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.3);">
            <div class="row">
                <div class="col-md-4">
                    <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip" src="{{ asset('storage/' . substr($user->image,7)) }}" data-original-title="Usuario">

                </div>
                <div class="col-md-6">
                    <h3>INFORMATION:</h3>
                    <div class="table-responsive">
                        <table class="table table-user-information">
                            <tbody>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                        Name:
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{ $user->name }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-user  text-primary"></span>
                                        Role:
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{ $user->role->name }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-cloud text-primary"></span>
                                        Email
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{ $user->email }}
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-bookmark text-primary"></span>
                                        Phone
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{ $user->phone }}
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
