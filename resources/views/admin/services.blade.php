<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Bitmap</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* Reset and Base Styles */
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        body { background-color: #f1f5f9; display: flex; justify-content: center; align-items: center; min-height: 100vh; color: #334155; }
        
        /* Card Container */
        .admin-card { background: #ffffff; width: 100%; max-width: 500px; padding: 40px; border-radius: 12px; box-shadow: 0 10px 25px rgba(0,0,0,0.05); border-top: 5px solid #2563eb; }
        
        /* Header */
        .admin-header { text-align: center; margin-bottom: 30px; }
        .admin-header h2 { color: #0f172a; font-size: 24px; font-weight: 700; margin-bottom: 8px; }
        .admin-header p { color: #64748b; font-size: 14px; }

        /* Form Groups */
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; font-weight: 600; font-size: 14px; margin-bottom: 8px; color: #1e293b; }
        .form-control { width: 100%; padding: 12px 15px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 15px; transition: all 0.3s ease; background: #f8fafc; }
        .form-control:focus { outline: none; border-color: #3b82f6; background: #ffffff; box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1); }
        textarea.form-control { resize: vertical; min-height: 100px; }

        /* Buttons */
        .btn-submit { width: 100%; background: #2563eb; color: white; padding: 14px; border: none; border-radius: 8px; font-size: 16px; font-weight: 600; cursor: pointer; transition: background 0.3s ease; margin-top: 10px; }
        .btn-submit:hover { background: #1d4ed8; }
        .btn-back { display: block; text-align: center; margin-top: 20px; color: #64748b; text-decoration: none; font-size: 14px; transition: color 0.3s ease; }
        .btn-back:hover { color: #2563eb; }

        /* Success Alert */
        .alert-success { background: #dcfce7; color: #166534; padding: 12px; border-radius: 8px; font-size: 14px; margin-bottom: 20px; border: 1px solid #bbf7d0; text-align: center; }
    </style>
</head>
<body>

    <div class="admin-card">
        <div class="admin-header">
            <h2>Add New Service</h2>
            <p>This will instantly appear on the live Bitmap website.</p>
        </div>

        @if(session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="/admin/services" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="title">Service Title</label>
                <input type="text" id="title" name="title" class="form-control" required placeholder="e.g. Mobile App Development">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control" required placeholder="Describe what this service offers..."></textarea>
            </div>

            <!-- We are using a hidden input for the icon for now to keep it simple -->
            <input type="hidden" name="icon" value="fa-cog">

            <button type="submit" class="btn-submit">Save & View Website</button>
            <a href="/bitmap" class="btn-back">← Back to Live Website</a>
        </form>
    </div>

</body>
</html>