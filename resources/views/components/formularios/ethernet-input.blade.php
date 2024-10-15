<!---------- IP Ethernet ---------->
<div>
    <label class="block text-base font-medium text-gray-900">IP Ethernet</label>
    <input type="text" name="ip_ethernet" value="{{ old('ip_ethernet') }}"
        class="block w-full p-1 text-gray-900 border {{ $errors->has('ip_ethernet') ? 'border-red-500 bg-red-200' : 'border-gray-300' }} rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500"
        maxlength="15">
    <x-input-error :messages="$errors->get('ip_ethernet')" class="mt-2" />
</div>

<!---------- MAC Ethernet ---------->
<div>
    <label class="block text-base font-medium text-gray-900">MAC Ethernet</label>
    <input type="text" name="mac_ethernet" value="{{ old('mac_ethernet') }}"
        class="block w-full p-1 text-gray-900 border {{ $errors->has('mac_ethernet') ? 'border-red-500 bg-red-200' : 'border-gray-300' }} rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500"
        maxlength="17">
    <x-input-error :messages="$errors->get('mac_ethernet')" class="mt-2" />
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var ipPattern =
            /\b(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\b/;

        var macPattern = /^([0-9A-Fa-f]{2}:){5}[0-9A-Fa-f]{2}$/;

        const ipInput = document.querySelector('input[name="ip_ethernet"]');
        if (ipInput) {
            ipInput.addEventListener('input', function() {
                if (this.value === '') {
                    this.classList.remove('border-red-500', 'bg-red-200');
                } else if (!ipPattern.test(this.value)) {
                    this.classList.add('border-red-500', 'bg-red-200');
                } else {
                    this.classList.remove('border-red-500', 'bg-red-200');
                }
            });
        }

        function formatMac(input) {
            let value = input.value.replace(/[^0-9A-Fa-f]/g, '');
            let mac = '';
            for (let i = 0; i < value.length; i++) {
                mac += value[i];
                if ((i % 2 === 1) && i < value.length - 1) {
                    mac += ':';
                }
            }
            input.value = mac.toUpperCase();
        }

        function validateMac(input) {
            if (input.value === '') {
                input.classList.remove('border-red-500', 'bg-red-200');
            } else if (!macPattern.test(input.value)) {
                input.classList.add('border-red-500', 'bg-red-200');
            } else {
                input.classList.remove('border-red-500', 'bg-red-200');
            }
        }

        const macInput = document.querySelector('input[name="mac_ethernet"]');
        if (macInput) {
            macInput.addEventListener('input', function() {
                formatMac(macInput);
                validateMac(macInput);
            });
        }
    });
</script>
