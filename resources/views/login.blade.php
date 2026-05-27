<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Student Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Fraunces:wght@600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #fff1f6;
            --card: rgba(255, 252, 253, 0.94);
            --border: rgba(214, 51, 132, 0.14);
            --text: #31111f;
            --muted: #7a5867;
            --heading: #5c1537;
            --primary: #d63384;
            --accent: #f06292;
            --error-bg: #ffe0e8;
            --error-text: #a61e63;
            --success-bg: #fce5ef;
            --success-text: #8e1f53;
            --shadow: 0 24px 60px rgba(166, 30, 99, 0.14);
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
            padding: 24px;
            font-family: "Inter", system-ui, sans-serif;
            color: var(--text);
            background:
                radial-gradient(circle at top left, rgba(214, 51, 132, 0.22), transparent 30%),
                radial-gradient(circle at bottom right, rgba(240, 98, 146, 0.16), transparent 28%),
                linear-gradient(145deg, #fff6fa, var(--bg));
        }

        .shell {
            width: min(980px, 100%);
            display: grid;
            grid-template-columns: minmax(0, 1.1fr) minmax(320px, 420px);
            overflow: hidden;
            border-radius: 28px;
            background: var(--card);
            border: 1px solid var(--border);
            box-shadow: var(--shadow);
        }

        .intro, .panel {
            padding: 40px 34px;
        }

        .intro {
            background: linear-gradient(160deg, rgba(92, 21, 55, 0.98), rgba(166, 30, 99, 0.94));
            color: #fffaf4;
        }

        .intro h1, .panel h2 {
            font-family: "Fraunces", Georgia, serif;
            margin: 0 0 14px;
        }

        .intro p {
            max-width: 44ch;
            line-height: 1.7;
            color: rgba(255, 250, 244, 0.82);
        }

        .eyebrow {
            display: inline-block;
            margin-bottom: 16px;
            padding: 8px 12px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.12);
            font-size: 0.78rem;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            font-weight: 700;
        }

        .panel {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .panel p {
            margin-top: 0;
            color: var(--muted);
        }

        .message {
            padding: 14px 16px;
            border-radius: 16px;
            margin-bottom: 16px;
        }

        .message-error { background: var(--error-bg); color: var(--error-text); }
        .message-success { background: var(--success-bg); color: var(--success-text); }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 700;
            color: var(--heading);
        }

        input {
            width: 100%;
            margin-bottom: 16px;
            padding: 13px 15px;
            border-radius: 16px;
            border: 1px solid rgba(214, 51, 132, 0.16);
            background: rgba(255, 255, 255, 0.96);
            color: var(--text);
            font-size: 0.98rem;
        }

        input:focus {
            outline: none;
            border-color: rgba(214, 51, 132, 0.55);
            box-shadow: 0 0 0 4px rgba(214, 51, 132, 0.12);
        }

        button {
            width: 100%;
            padding: 14px 18px;
            border: 0;
            border-radius: 999px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            color: #fffdf8;
            font-weight: 700;
            cursor: pointer;
            box-shadow: 0 10px 24px rgba(214, 51, 132, 0.22);
        }

        @media (max-width: 820px) {
            .shell { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <main class="shell">
        <section class="intro">
            <div class="eyebrow">Campus Portal</div>
            <h1>Student records access portal</h1>
            <p>Sign in to manage student, teacher, and degree records with a cleaner pink-themed interface built for deployment.</p>
        </section>

        <section class="panel">
            <h2>Login Form</h2>
            <p>Enter your username and password.</p>

            @if (session('success'))
                <div class="message message-success">{{ session('success') }}</div>
            @endif

            @if ($errors->has('login'))
                <div class="message message-error">{{ $errors->first('login') }}</div>
            @endif

            @if (!empty($message))
                <div class="message message-error">{{ $message }}</div>
            @endif

            <form method="POST" action="{{ route('login.authenticate') }}">
                @csrf
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="{{ old('username') }}" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Log In</button>
            </form>
        </section>
    </main>
</body>
</html>
