<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content">
            <div class="col-8">
                <div class="card">
                    <div class="card-header text-center">Posts</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Title</td>
                                    <td>Author</td>
                                    <td>Published</td>
                                    <td>Actions</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{$post->id}}</td>
                                        <td>{{substr($post->title,0,25)}} ... </td>
                                        <td>{{$post->user->name}}</td>
                                        <td>{{$post->published ? 'Yes' : 'No'}}</td>
                                        <td>
                                            <a href="#" class="btn btn-warning">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$posts->links()}}
                    </div>
                </div>

            </div>
        </div>
        <hr>
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header text-center">New Post</div>
                    <div class="card-body">
                        <form method="post" action="{{route('new-post')}}">
                            @csrf
                            <fieldset>
                                <div class="form-group">
                                    <label for="author" class="col-sm-2 col-form-label">Author</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="user_id" id="author">
                                            @foreach($users as $user)
                                                <option value="{{$user->id}}">{{$user->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="title" class="col-sm-2 control-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title" id="title" class="form-control" placeholder="My wonderful life (jk)">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="content" class="col-sm-2 control-form-label">Content</label>
                                    <div class="col-sm-10">
                                        <textarea name="content" id="content" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="published" class="col-sm-2 control-form-label">Published</label>
                                    <div class="col-sm-10">
                                        <select name="published" id="published" class="form-control">
                                            <option value="0">Nope</option>
                                            <option value="1">Yeah! Publish it.</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class=" ml-3 btn btn-primary">Create Post</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
