@props(['sectionTitle','sectionSubTitle'])
<div {{$attributes->merge(['class'=>'section-header'])}} >
    <h2>{{$sectionTitle}}</h2>
    <p>{{$sectionSubTitle}}</p>
</div>
