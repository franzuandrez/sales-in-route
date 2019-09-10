<div class="row">
    <div class="ui grid">
        <div class="eight wide column">
            <div class="ui category search">
                <div class="ui action input">
                    <input
                        class=""
                        onkeydown="if(event.keyCode == 13)
                            ajaxLoad('{{Request::url()}}?search='+this.value+'&sort={{$sort}}&field={{$sortField}} ')"
                        type="text"
                        value="{{$search}}"
                        placeholder="Buscar...">

                    <button class="ui icon button"
                        onclick="ajaxLoad('{{Request::url()}}?search='+this.value+'&sort={{$sort}}&field={{$sortField}} ')">
                        <i class="icon search"></i>
                    </button>
                    <button class="ui icon button"
                            onclick="ajaxLoad('{{Request::url()}}?search=')">
                        <i class="icon trash"></i>
                    </button>

                </div>
                <div class="results"></div>
            </div>
        </div>
    </div>
</div>
