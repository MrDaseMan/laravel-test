@section('content')
<div class="content">
    <h1>Contact me</h1>

    <div class="block">
        <h2>Directly</h2>
        <p>
            <div>
                email: <a href="mailto:work.mrdaseman@gmail.com" target="_blank">work.mrdaseman@gmail.com</a>
            </div>
            <div>
                github: <a href="https://github.com/mrdaseman" target="_blank">https://github.com/mrdaseman</a>
            </div>
        </p>
    </div>

    <div class="block">
        <h2>Or send ur contact info via form</h2>
        <form method="post" action="{{ 'sendContacts' }}">
            @csrf
            <div>
                <label for="phone">Phone</label>
                <input type="tel" name="phone" id="phone" placeholder="Give us your phone to contact you..." required>
            </div>
            <div>
                <label for="message">Message</label>
                <textarea type="text" name="message" id="message" placeholder="I want to contact you for..." required rows="5"></textarea>
            </div>
            <button type="submit" submit="button">Submit</button>
        </form>
    </div>
</div>

@vite('resources/scss/main.scss')