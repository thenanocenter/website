@extends('layouts.app')

@section('content')
<h1>What Is Nano</h1>

    <div class="row">
        <div class="col-sm-4">
            @include('components.nano.card',[
            'imageURL'=>'https://i0.wp.com/lvena26b6e621o8sl2qkx1ql-wpengine.netdna-ssl.com/wp-content/uploads/2017/12/blocklattice-1.png?resize=389%2C432&ssl=1',
            'url'=>'https://nanothings.store/what-is-nano/',
            'title'=>'What is Nano?',
            'author'=>'NanoThings'
            ])
        </div>
        <div class="col-sm-4">
            @include('components.nano.card',[
            'imageURL'=>'https://i2.wp.com/nanothings.store/wp-content/uploads/2018/03/coinbase.png?w=1343&ssl=1',
            'url'=>'https://nanothings.store/how-do-i-actually-buy-nano/',
            'title'=>'How Do I Actually Buy NANO?',
            'author'=>'NanoThings'
            ])
        </div>
        <div class="col-sm-4">
            @include('components.nano.card',[
            'imageURL'=>'https://i2.wp.com/nanothings.store/wp-content/uploads/2018/03/nlTsLKPh.jpg?w=1024&ssl=1',
            'url'=>'https://nanothings.store/why-the-nano-roadmap-is-more-than-just-a-roadmap/',
            'title'=>'Why the Nano Roadmap is More than Just a Roadmap',
            'author'=>'NanoThings'
            ])
        </div>
    </div>

@endsection
