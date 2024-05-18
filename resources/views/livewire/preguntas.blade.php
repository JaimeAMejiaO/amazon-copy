<div>
    <form wire:submit.prevent="store">
        <div class=" mt-5">
            <label class="block uppercase tracking-wide text-grey-darker text-gray-600 text-lg font-bold mb-2"
                for="pregunta">
                Realice su pregunta sobre el producto
            </label>
            <input type="text" name="pregunta" wire:model.debounce.365ms="pregunta"
                placeholder="Escriba acá"
                class="border p-3 rounded form-input focus:outline-none w-full shadow-md focus:shadow-lg transition duration-150 ease-in-out">
            @error('pregunta')
                <p class="text-red-700 font-semibold mt-2">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div id="captcha" class="mt-4" wire:ignore></div>

        @error('captcha')
            <p class="mt-3 text-sm text-red-600 text-left">
                {{ $message }}
            </p>
        @enderror


        <button type="submit" class="some-button-style">
            Submit
        </button>
    </form>

    <script src="https://www.google.com/recaptcha/api.js?onload=handle&render=explicit" async defer></script>

    <script>
        var handle = function(e) {
            widget = grecaptcha.render('captcha', {
                'sitekey': '{{ env('CAPTCHA_SITE_KEY') }}',
                'theme': 'light', // you could switch between dark and light mode.
                'callback': verify
            });

        }
        var verify = function(response) {
            @this.set('captcha', response)
        }
    </script>
</div>
