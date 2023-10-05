<script type="module" src="/src/routes/resources/js/routes/ClassExample.js?v=<?= APP_VERSION ?>" defer></script>
<style> @import url('/src/routes/resources/css/ClassExample.css?v=<?= APP_VERSION ?>'); </style>

<section>
    <div class="space-100"></div>
    <div class="container">
        <h2>Class Example!</h2>
        <div class="space-20"></div>
        <p>You can import classes into the Javascript files to make your application more modular. Try changing the values of the text inputs and observe the result.</p>
        <form id="form-add-person" class="form-add-person">
            <div class="input-container">
                <label for="input-name">Name</label>
                <input type="text" id="input-name" class="input-text">
                <div class="space-20"></div>
                <label for="input-age">Age</label>
                <input type="number" id="input-age" min="0" max="99" class="input-text">
                <div class="space-50"></div>
                <button type="submit" class="btn">Go!</button>
            </div>
        </form>
        <div class="space-50"></div>
        <div class="result">
            <h3>Result</h3>
            <p id="text-result"></p>
        </div>
    </div>
    <div class="space-200"></div>
</section>