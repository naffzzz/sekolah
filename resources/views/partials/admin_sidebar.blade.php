<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <a href="{{route('admin.index')}}" class="nav-link" id="dashboard">
            <i class="nav-icon fas fa-th"></i>
            <p>
                {{__('Dashboard')}}
            </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{route('admin.profile.edit')}}" class="nav-link" id="profile">
            <i class="nav-icon fas fa-user-circle"></i>
            <p>
                {{__('Profile')}}
            </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{route('admin.families.index')}}" class="nav-link" id="families">
            <i class="nav-icon fas fa-users"></i>
            <p>
                {{__('Families')}}
            </p>
        </a>
      </li>

      @can('view_chat')
          <li class="nav-item">
            <a href="{{route('admin.chat.index')}}" class="nav-link" id="chat">
              <i class="nav-icon far fa-comment-dots"></i>
              <p>
                {{__('Chat')}}
              </p>
            </a>
          </li>
      @endcan     

      @canany(['view_user','view_role'])
        <li class="nav-item has-treeview" id="users_roles">
          <a href="#" class="nav-link" id="users_roles_link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              {{__('Roles And Users')}}
              <i class="right fa-regular fa-user-lock"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

            @can('view_role')
            <li class="nav-item">
              <a href="{{route('admin.roles.index')}}" class="nav-link" id="roles">
                <i class="far fa-circle nav-icon"></i>
                <p>{{__('Roles')}}</p>
              </a>
            </li>
            @endcan

            @can('view_user')
            <li class="nav-item">
              <a href="{{route('admin.users.index')}}" class="nav-link" id="users">
                <i class="far fa-circle nav-icon"></i>
                <p>{{__('Users')}}</p>
              </a>
            </li>
            @endcan

          </ul>
        </li>
      @endcan      

      @can('view_activity_log')
      <li class="nav-item">
        <a href="{{route('admin.activity_logs.index')}}" class="nav-link" id="activity_logs">
          <i class="fa fa-server nav-icon"></i>
          <p>{{__('Activity Logs')}}</p>
        </a>
      </li>
      @endcan

      @can('view_translation')
      <li class="nav-item">
        <a href="{{route('admin.translations.index')}}" class="nav-link" id="translations">
          <i class="fa fa-book nav-icon"></i>
          <p>{{__('Translations')}}</p>
        </a>
      </li>
      @endcan
      
      @can('view_setting')
      <li class="nav-item">
        <a href="{{route('admin.settings.index')}}" class="nav-link" id="settings">
          <i class="fa fa-cogs nav-icon"></i>
          <p>{{__('Settings')}}</p>
        </a>
      </li>
      @endcan


    </ul>
  </nav>