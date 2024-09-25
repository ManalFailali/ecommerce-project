
@foreach ($users as $user)
    <div>
        User: {{$user->name}}<br />
        Eamil: {{$user->email}} <br />
        userType: {{$user->usertype}} <br />
        Password: {{$user->password}} :: password  <br /><br /><br />
    </div>
@endforeach
