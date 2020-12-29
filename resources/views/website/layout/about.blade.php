@extends('website.layout.core.master')

@section('title', 'About Us')

@section('content')

    <div class="container-fluid aboutUs-img">
        <img src="{{ asset('image/banner/banner.jpg') }}" alt="" width="100%">
    </div>

    <div class="container aboutUs-info">
        <h1 >About Us</h1>

        <div class="row">
            <h2 class="aboutUs-title">Who We Are:</h2>
            <div class="aboutUs-text">
                <p>Tran's Store is an independent bookseller serving Portland, Oregon. Through Tran's Store and our
                expansive online community, we also reach readers around the world, people who are as excited about
                books as we are.</p>

                <p>We are grounded by our company's core values, which have guided us through the ups and downs of the
                bookselling industry. Each and every employee's love of books drives us forward.</p>

                <p>We look forward to a future filled with many new opportunities, new innovations, and, of course, new
                books!</p>
            </div>
        </div>
        <hr>


        <div class="row">
            <h2 class="aboutUs-title">Values:</h2>
            <div class="aboutUs-text">
                <p><span>We love everything about books.</span> As entertainment, as tools of discovery, and as timeless works of art,
                we believe books have the unique ability to transport us and transform our world view. </p>

                <p><span>We're conversation starters.</span> We're an eclectic team of readers with broad interests and strong feelings
                about the books on our shelves. And we're committed to sharing our knowledge and enthusiasm with our
                customers every day.</p>

                <p><span>We're nothing without our customers.  </span>Tran's would not be the destination it is now without its loyal
                customers.</p>

                <p><span>We recognize that every reader is different. </span>We know readers are as unique and complex as the books we
                sell. We, in turn, make every effort to engage with our customers, respond to their needs, and learn
                from their feedback.</p>

                <p><span>We're creative and resourceful. </span>We built our name on innovative bookselling, and we continue to evolve
                by remaining curious and inventive.</p>

                <p><span>We support readers and writers. </span>Through literary events, original content, and a vibrant online
                community, we're dedicated to promoting great authors and their books, literacy, and freedom of
                expression.</p>

                <p> <span>We exchange ideas.</span> We all play a role in Tran's success, and it's the sharing of our unique
                perspectives that generates exceptional ideas.</p>
            </div>
        </div>


    </div>
@endsection
