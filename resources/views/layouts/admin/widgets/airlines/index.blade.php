<div class="table-responsive">
    <table class="table table-borderless align-middle">
        <thead>
            <tr>
                <th scope="col" style="text-align: center"></th>
                <th scope="col">{{ __("admin.airlinesName") }}</th>
                <th scope="col">{{ __("admin.airlinesICAO") }}</th>
                <th scope="col">{{ __("admin.airlinesIATA") }}</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($airlines as $airline)
            <tr>
                <td style="text-align: center">
                    <img class="airlineslogo" src="{{URL::asset("/src/img/airlines/$airline->logo")
                    }}"/>
                </td>
                <td>{{$airline->name}}</td>
                <td>{{$airline->icao}}</td>
                <td>{{$airline->iata}}</td>
                <td>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <a
                                    href="{{ route('airlines.edit', $airline->id)}}"
                                    class="btn btn-warning"
                                    ><i class="fas fa-edit fa-fw"></i
                                ></a>
                            </div>
                            <div class="col-sm-3">
                                <form
                                    action="{{ route('airlines.destroy', $airline->id)}}"
                                    method="post"
                                >
                                    @csrf @method('DELETE')
                                    <button
                                        class="btn btn-danger"
                                        type="submit"
                                    >
                                        <i class="fas fa-trash fa-fw"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $airlines->links() }}
