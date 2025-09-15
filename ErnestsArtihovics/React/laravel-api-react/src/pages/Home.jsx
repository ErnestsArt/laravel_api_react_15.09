export default function Layout() {
    return(
        <>
        <header>
            <nav>
                <link to="/" className="nav-link">
                Home
                </link>
            </nav>
        </header>

        <main>
            <Outlet/>
        </main>
        </>
    )
}