<!DOCTYPE html>
<html>
<head>
    <title>Task Manager</title>
    <style>
        
{ margin: 0; padding: 0; box-sizing: border-box; }
      body { font-family: Arial, sans-serif; background: #121212; padding: 40px 20px; }.container { max-width: 900px; margin: 0 auto; background: #1e1e1e; border-radius: 10px; padding: 30px; box-shadow: 0 2px 10px rgba(0,0,0,0.08); }
      h1 { margin-bottom: 20px; color: #2c3e50; }.alert-success { background: #d4edda; color: #155724; padding: 10px 15px; border-radius: 6px; margin-bottom: 15px; }
      table { width: 100%; border-collapse: collapse; margin-top: 15px; }
      th, td { padding: 12px; text-align: left; border-bottom: 1px solid #eee; }
      th { background: #2c3e50; color: white; }.btn { display: inline-block; padding: 6px 14px; border-radius: 5px; text-decoration: none; color: white; font-size: 13px; border: none; cursor: pointer; margin-right: 5px; }.btn-add { background: #27ae60; padding: 10px 18px; }.btn-edit { background: #2980b9; }.btn-delete { background: #e74c3c; }.btn-toggle { background: #8e44ad; }.badge { padding: 4px 10px; border-radius: 12px; font-size: 12px; font-weight: bold; }.badge-pending { background: #fff3cd; color: #856404; }.badge-completed { background: #d4edda; color: #155724; }
      form.inline-form { display: inline; }
      input, textarea { width: 100%; padding: 8px; margin: 5px 0 15px; border: 1px solid #ccc; border-radius: 5px; }

      .btn { display: inline-block; padding: 6px 14px; border-radius: 5px; text-decoration: none; color: white; font-size: 13px; border: none; cursor: pointer; margin-right: 5px; }
        .btn-add { background: #27ae60; padding: 10px 18px; }
        .btn-edit { background: #2980b9; }
        .btn-delete { background: #e74c3c; }
        .btn-toggle { background: #8e44ad; }
        .badge { padding: 4px 10px; border-radius: 12px; font-size: 12px; font-weight: bold; }
        .badge-pending { background: #4a3c00; color: #ffdd57; }
        .badge-completed { background: #1e3a24; color: #8fd19e; }
        form.inline-form { display: inline; }
        input, textarea { width: 100%; padding: 8px; margin: 5px 0 15px; border: 1px solid #444; border-radius: 5px; background: #2a2a2a; color: #e0e0e0; }
      .actions-group {
    display: flex;
    flex-wrap: wrap;
    gap: 6px;
    width: 160px;
}
.actions-group .btn-edit,
.actions-group form.inline-form:not(.delete-form) {
    flex: 1 1 0;
    margin: 0;
    text-align: center;
}
.actions-group form.inline-form:not(.delete-form) .btn-toggle {
    width: 100%;
}
.actions-group .delete-form {
    flex: 1 0 100%;
    margin: 0;
}
.actions-group .btn-delete {
    width: 100%;
}
}
    </style>
</head>
<body>
    <div class="container">
        <h1> TEST Task Manager</h1>
        @if(session('success'))
            <div class="alert-success">{{ session('success') }}</div>
        @endif
        @yield('content')
    </div>
</body>
</html>