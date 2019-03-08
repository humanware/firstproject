<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a New Project</title>
</head>
<body>
<h1>Create a new Project</h1>
<form method="POST" action="/projects">
    @csrf
    <div>
        <input type="text" name="project_title" placeholder="Enter Project Name" />
    </div>
    <div>
        <textarea name="project_description" placeholder="Enter project description"></textarea>
    </div>
    <div>
        <button type="submit">Create New Project</button>
    </div>
</form>
</body>
</html>
