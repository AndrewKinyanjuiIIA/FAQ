
<div class="container-fluid footer marg30">
    <div class="container">
        <div class="col-xs-12 col-sm-4 col-md-4 margin-top-20">
            <div class="panel-transparent">
                <div class="footer-heading">How Biashara Now Works</div>
                <div class="footer-body">
                    <p>Is an online network of entrepreneur, financial institutions,
                        investors,big corporates and executive coaches 
                        where the Entrepreneur can access to skills development and financing and markets.</p>
                    <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                        ex ea commodo consequat. </p>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 margin-top-20">
            <div class="panel-transparent">
                <div class="footer-heading">Categories</div>
                <div class="footer-body">
                    <ul>
                        @foreach($footerCategories as $category)
                            <li>
                                <a href="{{ route('categories.show', [$category->slug, $category->id]) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 margin-top-20">
            <div class="panel-transparent">
                <div class="footer-heading">Popular Articles</div>
                <div class="footer-body">
                    <ul>
                        @foreach($popularArticles as $article)
                            <li>
                                <a href="{{ route('articles.show', [$article->slug, $article->id]) }}">{{ $article->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- COPYRIGHT INFO -->
<div class="container-fluid footer-copyright marg30">
    <div class="container">
        <div class="pull-left">
            Copyright © 2021 IIA Kenya</a>
        </div>
        <div class="pull-right">
            <i class="fa fa-facebook"></i> &nbsp;
            <i class="fa fa-twitter"></i> &nbsp;
            <i class="fa fa-linkedin"></i>
        </div>
    </div>
</div>
<!-- END COPYRIGHT INFO -->