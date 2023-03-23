@can('edit_families')
    <a href="{{route('admin.families.edit',$family['id'])}}" class="btn btn-primary btn-sm">
        <i class="fa fa-edit"></i>
    </a>
@endcan

@can('delete_families')
    <form method="POST" action="{{route('admin.families.destroy',$family['id'])}}"  class="d-inline">
        <input type="hidden" name="_method" value="delete">
        <button type="submit" class="btn btn-danger btn-sm delete_user">
            <i class="fa fa-trash"></i>
        </button>
    </form>
@endcan