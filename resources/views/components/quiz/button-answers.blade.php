@props([
    'currentQuestion' => [],
])

<div class="container text-center ">
    <div class="gap-4">
        @foreach($currentQuestion['answers'] as $key => $answer)
            <button class="quiz-btn
                        @if(!empty($answer['selected'])) click-green @endif
                        @if(!empty($currentQuestion['multiple'])) multiple-btn @endif
                        @if(empty($currentQuestion['multiple'])) single-btn @endif
                    "
                    id="{{$currentQuestion['question_key'].'-'.$key}}"
                    @if(!empty($currentQuestion['multiple']))
                        wire:click="nextSlideMultiple({{$key}})"
                        data-multiple="1"
                    @else
                        wire:click.prevent="nextSlide({{$key}})"
                    @endif
                    type="button"
            >
                {{$answer['text']}}
            </button>
        @endforeach

    </div>
</div>