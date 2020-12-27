 <div class="panel-title">WHAT TO DO?</div>
                            <small class="fo">This is what to do list</small>
                            <div class="list-item-container" style="width: 100%;">
                               <ul class="list-group clear-list m-t">
                                @foreach($data as $i)
                                <li class="list-group-item listitemactivty">
                               {{$i->p_task}}
                                <span class="label label-default">1</span>
                            </li>
                            @endforeach
                        </ul>