@extends('layouts.master')

@section('title')
			Welcome to Digital CRM!
@endsection()

@section('content')

{{--    @foreach ($data as $key => $user)--}}
{{--        <tr>--}}
{{--            <td>{{ ++$i }}</td>--}}
{{--            <td>{{ $user->name }}</td>--}}
{{--            <td>{{ $user->email }}</td>--}}
{{--            <td>{{ $user->usertype }}</td>--}}

{{--            </td>--}}
{{--            <td class="text-center">--}}
{{--                <a dusk="edit-button" href="{{ route('users.edit', $user->id)}}" class="btn btn-primary btn-sm">Bewerken</a>--}}
{{--                <a dusk="show-button" href="{{ route('users.show', $user->id)}}" class="btn btn-primary btn-sm">Detail</a>--}}
{{--                <form action="{{ route('users.destroy', $user->id)}}" method="post" style="display: inline-block">--}}
{{--                    @csrf--}}
{{--                    @method('DELETE')--}}
{{--                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>--}}
{{--                </form>--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--    @endforeach--}}
{{--</table>--}}

@endsection()

@section('scripts')


@endsection()
