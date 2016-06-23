@if($paginate)
    <?php $size = 7 ?>
    <div id="pages">
        <a
                @if($paginate['prev_page_url'])
                href="?page=1"
                @eles
                class="nolink"
                @endif
        >首页</a>
        <a
                @if($paginate['prev_page_url'])
                href="{{ $paginate['prev_page_url'] }}"
                @eles
                class="nolink"
                @endif
        >上一页</a>
        {{--<a class="curr">{{ $paginate['current_page'] }}</a>--}}
        @if($paginate['current_page'] > $size - 2 && $paginate['current_page'] < $paginate['last_page'] - 2 && $paginate['last_page'] > $size)
            @for($i=$paginate['current_page'] - 3 ; $i < $paginate['current_page'] + 3 ; $i++)
                @if($i == $paginate['current_page'])
                    <a class="curr">{{ $i }}</a>
                @else
                    <a href="?page={{ $i }}">{{ $i }}</a>
                @endif
            @endfor
        @elseif($paginate['current_page'] >=  $paginate['last_page'] - 2 && $paginate['last_page'] > $size)
            @for($i=1 ; $i <= $size ; $i++)
                @if($paginate['last_page'] - $size + $i == $paginate['current_page'])
                    <a class="curr">{{ $paginate['last_page'] - $size + $i }}</a>
                @else
                    <a href="?page={{ $paginate['last_page'] - $size + $i }}">{{ $paginate['last_page'] - $size + $i }}</a>
                @endif
            @endfor
        @else
            @for($i=1 ; $i < $size  && $i <= $paginate['last_page'] ; $i++)
                @if($i == $paginate['current_page'])
                    <a class="curr">{{ $i }}</a>
                    @else
                    <a href="?page={{ $i }}">{{ $i }}</a>
                @endif
            @endfor
        @endif
        <a href="{{ $paginate['next_page_url'] }}">下一页</a>
        <a href="?page={{ $paginate['last_page'] }}">尾页</a>共{{ $paginate['total'] }}部影片&nbsp;当前:{{ $paginate['current_page'] }}
        /{{ $paginate['last_page'] }}页
    </div>
@endif

