@section('content')
<div>
    <h1>Contacts me</h1>
    <h2>Directly</h2>
    <p>
        <div>
            email: <a href="mailto:work.mrdaseman@gmail.com" target="_blank">work.mrdaseman@gmail.com</a>
        </div>
        <div>
            github: <a href="https://github.com/mrdaseman" target="_blank">https://github.com/mrdaseman</a>
        </div>
    </p>

    <h2>Or send ur contact via form</h2>
    <form method="post" action="{{ 'sendContacts' }}">
        {{-- field to phone number and message to send --}}
        @csrf
        <div>
            <label for="phone">Phone</label>
            <input type="tel" name="phone" id="phone" placeholder="+79999999999" required>
        </div>
        <div>
            <label for="message">Message</label>
            <input type="text" name="message" id="message" required></input>
        </div>
        <button type="submit" submit="button">Submit</button>
    </form>
</div>

<style>
    form {
        display: flex;
        flex-direction: column;
        gap: 12px;

        width: 400px;
    }

    form div {
        display: flex;
        flex-direction: column;
    }
</style>