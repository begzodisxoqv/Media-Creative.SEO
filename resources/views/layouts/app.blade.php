<!DOCTYPE html>
<html lang="en">

        @include('site.classes.head')

    <body>
        @include('site.classes.header')

        @yield('content')

        @include('site.classes.footer')
        @include('site.classes.script')
        @include('sweetalert::alert')


    </body>

</body>
</html>
