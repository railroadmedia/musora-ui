<div>
    <h4 class="py-2 text-center text-white bg-edge-dark-blue font-semibold">what do you want to work on?</h4>
    <div class="p-3 flex flex-wrap text-xs font-medium">
        <div class="w-1/2 small:w-1/5 p-1">
            <div class="account-lessons rounded-full border-2 border-edge-dark-blue flex cursor-pointer flex justify-center leading-none">
                <input type="checkbox" id="beats" name="beats" class="hidden lesson-cb"><label for="beats" class="py-2 cursor-pointer text-edge-dark-blue">beats</label>
            </div>
        </div>

        <div class="w-1/2 small:w-1/5 p-1">
            <div class="account-lessons rounded-full border-2 border-edge-dark-blue flex cursor-pointer flex justify-center leading-none">
                <input type="checkbox" id="beats" name="beats" class="hidden lesson-cb"><label for="beats" class="py-2 cursor-pointer text-edge-dark-blue">theory</label>
            </div>
        </div>

        <div class="w-1/2 small:w-1/5 p-1">
            <div class="account-lessons rounded-full border-2 border-edge-dark-blue flex cursor-pointer flex justify-center leading-none">
                <input type="checkbox" id="beats" name="beats" class="hidden lesson-cb"><label for="beats" class="py-2 cursor-pointer text-edge-dark-blue">fills</label>
            </div>
        </div>

        <div class="w-1/2 small:w-1/5 p-1">
            <div class="account-lessons rounded-full border-2 border-edge-dark-blue flex cursor-pointer flex justify-center leading-none">
                <input type="checkbox" id="beats" name="beats" class="hidden lesson-cb"><label for="beats" class="py-2 cursor-pointer text-edge-dark-blue">styles</label>
            </div>
        </div>

        <div class="w-1/2 small:w-1/5 p-1">
            <div class="account-lessons rounded-full border-2 border-edge-dark-blue flex cursor-pointer flex justify-center leading-none text-edge-dark-blue">
                <input type="checkbox" id="beats" name="beats" class="hidden lesson-cb"><label for="beats" class="py-2 cursor-pointer">technique</label>
            </div>
        </div>

        <div class="w-1/2 small:w-1/5 p-1">
            <div class="account-lessons rounded-full border-2 border-edge-dark-blue flex cursor-pointer flex justify-center leading-none">
                <input type="checkbox" id="beats" name="beats" class="hidden lesson-cb"><label for="beats" class="py-2 cursor-pointer text-edge-dark-blue">rudiments</label>
            </div>
        </div>

        <div class="w-1/2 small:w-1/5 p-1">
            <div class="account-lessons rounded-full border-2 border-edge-dark-blue flex cursor-pointer flex justify-center leading-none">
                <input type="checkbox" id="beats" name="beats" class="hidden lesson-cb"><label for="beats" class="py-2 cursor-pointer text-edge-dark-blue">ear training</label>
            </div>
        </div>

        <div class="w-1/2 small:w-1/5 p-1">
            <div class="account-lessons rounded-full border-2 border-edge-dark-blue flex cursor-pointer flex justify-center leading-none">
                <input type="checkbox" id="beats" name="beats" class="hidden lesson-cb"><label for="beats" class="py-2 cursor-pointer text-edge-dark-blue">independence</label>
            </div>
        </div>

        <div class="w-1/2 small:w-1/5 p-1">
            <div class="account-lessons rounded-full border-2 border-edge-dark-blue flex cursor-pointer flex justify-center leading-none">
                <input type="checkbox" id="beats" name="beats" class="hidden lesson-cb"><label for="beats" class="py-2 cursor-pointer text-edge-dark-blue">musicality</label>
            </div>
        </div>

        <div class="w-1/2 small:w-1/5 p-1">
            <div class="account-lessons rounded-full border-2 border-edge-dark-blue flex cursor-pointer flex justify-center leading-none">
                <input type="checkbox" id="beats" name="beats" class="hidden lesson-cb"><label for="beats" class="py-2 cursor-pointer text-edge-dark-blue">gear</label>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script type="text/javascript">
let lessons = document.getElementsByClassName('account-lessons');

Array.from(lessons).forEach(function(element) {
    element.addEventListener(
        'click',
        function(event) {

            let checkbox = element.getElementsByTagName('input')[0];

            checkbox.checked = !checkbox.checked;
            let isChecked = checkbox.checked;

            if (isChecked) {
                element.classList.remove('bg-edge-blue', 'text-edge-dark-blue', 'border-edge-dark-blue');
                element.classList.add('bg-white', 'text-edge-blue', 'border-white', 'font-semibold');
            } else {
                element.classList.remove('bg-white', 'text-edge-blue', 'border-white', 'font-semibold');
                element.classList.add('bg-edge-blue', 'text-edge-dark-blue', 'border-edge-dark-blue');
            }

            event.preventDefault();
            event.stopPropagation();
        }
    );
});
</script>
@endpush
