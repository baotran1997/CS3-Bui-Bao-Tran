@extends('admin.layout.master')

@section('title', 'Book Detail')

@section('content')
    <div class="container bootstrap snippets bootdey">

        <a href=" {{ route('books.index') }}" class="btn btn-primary mb-3 mr-auto"><- Back</a>
        <a href=" {{ route('books.edit', $book->id) }}" class="btn btn-success mb-3 mr-auto"><i class="fas fa-edit"></i> Edit Book</a>
        <div class="panel-body inf-content" style="border: 1px solid #DDDDDD;box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.3);">
            <div class="row">
                <div class="col-md-4">
                    <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip" src="{{ asset('storage/' . substr($book->image,7)) }}" data-original-title="Usuario">

                </div>
                <div class="col-md-6">
                    <h3>{{ $book->name }}</h3>
                    <div class="table-responsive">
                        <table class="table table-user-information">
                            <tbody>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                        Price:
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{ $book->price }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-user  text-primary"></span>
                                        Category:
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{ $book->category->name }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-cloud text-primary"></span>
                                        Author:
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{ $book->author->name }}
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-bookmark text-primary"></span>
                                        Description:
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {!! $book->description !!}
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-bookmark text-primary"></span>
                                        ISBN:
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{ $book->isbn}}
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-bookmark text-primary"></span>
                                        InStock:
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{ $book->inStock}} items
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-bookmark text-primary"></span>
                                        Sold:
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{ $book->sold}} items
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
