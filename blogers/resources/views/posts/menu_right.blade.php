<div class="col-md-4">

    <!-- Search Widget -->
    <div class="card my-4">
        <h5 class="card-header">Search</h5>
        <div class="card-body">
            <div class="input-group">
                <form class="form-inline my-2 my-lg-0" method="get" action="{{route('posts.search')}}">
                    @csrf
                    <input class="form-control mr-sm-2" name="keyword" value="{{ (request('keyword')) ? request('keyword') : '' }}" type="search" placeholder="Search"
                           aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>



    <!-- Categories Widget -->
    <div class="card my-4">
        <h5 class="card-header">Categories</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="{{route('categories.detail', $id = '1')}}">Sport</a>
                        </li>
                        <li>
                            <a href="{{route('categories.detail', $id = '2')}}">Music</a>
                        </li>
                        <li>
                            <a href="{{route('categories.detail', $id = '3')}}">Travel</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="{{route('categories.detail', $id = '4')}}">Economy</a>
                        </li>
                        <li>
                            <a href="{{route('categories.detail', $id = '5')}}">Society</a>
                        </li>
                        <li>
                            <a href="{{route('categories.index')}}">All topics</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Side Widget -->
    <div class="card my-4">
        <h5 class="card-header">Side Widget</h5>
        <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
        </div>
    </div>

</div>

