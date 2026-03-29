<header class="admin-header">
    <div class="admin-container">

        <!-- Logo + Title -->
        <div class="admin-logo">
            <img src="{{ asset('img/langhali-samaj-logo.png') }}" alt="Logo">
            <div class="admin-title">
                <h2>लङ्घाली मगर समाज</h2>
                <p>{{Auth::user()->name}}</p>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="admin-nav">
            <ul class="menu">

                <li>
                    <a href="#">Dashboard</a>
                </li>

                <li class="menu-item">
                    <a href="#">Members ▾</a>
                    <ul class="dropdown">
                        <li><a href="#">Add Member</a></li>
                        <li><a href="#">Members List</a></li>
                    </ul>
                </li>

                <li class="menu-item">
                    <a href="#">Records ▾</a>
                    <ul class="dropdown">
                        <li><a href="#">Register Records</a></li>
                        <li><a href="#">Members Records</a></li>
                    </ul>
                </li>

                <li class="menu-item">
                    <a href="#">Website ▾</a>
                    <ul class="dropdown">
                        <li><a href="#">Add Category</a></li>
                        <li><a href="#">Add Product</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{route('login.page')}}" class="logout-btn">Logout</a>
                </li>

            </ul>
        </nav>

    </div>
</header>