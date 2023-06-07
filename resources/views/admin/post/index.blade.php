<div>
    @include('utilities.alerts')
    <x-slot name="header">
        <div class="section-header">
            <h1>Posts Management</h1>
        </div>
    </x-slot>

    <div class="card">
        <div class="card-header">
            <h4>Posts Data</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col" width="5%">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Views</th>
                            <th scope="col">Status</th>
                            <th scope="col" width="5%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <th>{{ ($posts->currentpage() - 1) * $posts->perpage() + $loop->index + 1 }}</th>
                                <td>{{ $post->head }}</td>
                                <td>{{ $post->views }}</td>
                                <td>
                                    @if ($post->draft == '1')
                                        <span class="badge badge-primary">Draft</span>
                                    @else
                                        <span class="badge badge-dark">Published</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <button class="btn btn-sm btn-link" data-toggle="tooltip" data-placement="top"
                                            title="Delete" wire:click='deletePost({{ $post->id }})'>
                                            <i class="fas fa-trash text-danger"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</div>

<script>
    $().tooltip();
</script>
