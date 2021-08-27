@extends('layouts.main')

@section('content')
<div class="col-md-8 padding-20">
    <div class="row">
        <div class="col-md-12">
            <div class="fb-heading">
                Article Categories
            </div>
            <hr class="style-three">
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-md-6 margin-bottom-20">
                        <div class="fat-heading-abb">
                            <a href="{{ route('categories.show', [$category->slug, $category->id]) }}">
                                <i class="fa fa-folder"></i> {{ $category->name }}
                                <span class="cat-count">({{ $category->articles_count }})</span>
                            </a>
                        </div>
                        <div class="fat-content-small padding-left-30">
                            <ul>
                                @foreach($category->articles as $article)
                                    @if($loop->index >= 5)
                                        @break
                                    @endif
                                    <li>
                                        <a href="{{ route('articles.show', [$article->slug, $article->id]) }}">
                                            <i class="fa fa-file-text-o"></i> {{ $article->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
        {{ $categories->links('partials.pagination') }}
    </div>
</div>
@endsection

@section('about')
<div class="container-fluid featured-area-grey padding-30">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="fb-heading">
                    About Us
                </div>
                <div class="fb-content">
                    <p>
                    IIA is a leading Pan-African investment and trade 
                    catalyst coordinating efforts to enhance skills, finance and
                     markets across sectors to achieve impact and sustainability through job creations. 
                    </p>
                    <p>
                    We increase local business access to markets, skills and finance.
                     Bringing together leading companies across sectors allows IIA to be 
                     both more cost-effective and more impactful in supporting investment into Africa.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection