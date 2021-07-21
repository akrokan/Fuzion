<div class="bg-gray-900 h-screen min-h-full w-36 min-w-min shadow text-blue-200">
    <div class="brand h-14">
        
    </div>
    <ul>
        <li class="hover:bg-gray-600 hover:text-green-100">
            <span class="flow-root px-4 py-2">
                <a href="{{ url('/dashboard/comments/list') }}">Comments</a>
            </span>
        </li>
        <li class="hover:bg-gray-600 hover:text-green-100">
            <span class="flow-root px-4 py-2">
                <a href="{{ url('/dashboard/posts/list') }}">Posts</a>
            </span>
        </li>
        <li class="hover:bg-gray-600 hover:text-green-100">
            <span class="flow-root px-4 py-2">
                <a href="{{ url('/dashboard/users/list') }}">Users</a>
            </span>
        </li>
    </ul>
</div>