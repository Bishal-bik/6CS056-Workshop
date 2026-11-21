@props([
    'student' => null,
    'action',
    'method' => 'POST',
    'buttonText' => 'Save Student',
])

<form action="{{ $action }}" method="POST">
    @csrf

    @if ($method !== 'POST')
        @method($method)
    @endif

    <x-form-input
        name="name"
        label="Full Name"
        :value="$student?->name"
        required
    />

    <x-form-input
        name="email"
        label="Email"
        type="email"
        :value="$student?->email"
        required
    />

    <x-form-input
        name="phone"
        label="Phone"
        :value="$student?->phone"
        required
    />

    <x-form-textarea
        name="address"
        label="Address"
        :value="$student?->address"
    />

    <x-form-input
        name="date_of_birth"
        label="Date of Birth"
        type="date"
        :value="$student?->date_of_birth?->format('Y-m-d')"
    />

    <button type="submit" class="btn">
        {{ $buttonText }}
    </button>
</form>