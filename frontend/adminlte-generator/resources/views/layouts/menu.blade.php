
<li class="{{ Request::is('customerCPFs*') ? 'active' : '' }}">
    <a href="{!! route('customerCPFs.index') !!}"><i class="fa fa-edit"></i><span>Customer C P Fs</span></a>
</li>

<li class="{{ Request::is('customerCNPJs*') ? 'active' : '' }}">
    <a href="{!! route('customerCNPJs.index') !!}"><i class="fa fa-edit"></i><span>Customer C N P Js</span></a>
</li>
