<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 p-6 rounded-xl border border-gray-200">
            <h1 class="text-xl font-bold text-center">Log In!</h1>
            <form method="POST" action="/login" class="mt-10">
                @csrf

                <x-form.input name="email" type="email" />
                <x-form.input name="password" type="password" />


                <x-form.button>Log in</x-form.button>



            </form>
        </main>
    </section>
</x-layout>