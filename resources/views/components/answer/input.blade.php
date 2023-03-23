{{-- Hide the answer input box if a user is viewing their own question--}}
@unless ($question->user->id == auth()->user()->id)   
    <div>
        <form action="{{route('answers.store')}}" method="POST">
            @csrf
            
            <input type="hidden" name="question_id" value="{{$question->id}}">
            <x-form.input name="answer" type="textarea" label="Ecrivez votre réponse" required="required"/>

            <button type="submit" class="mt-3 rounded-md py-1 px-4 bg-neutral-600 text-white font-medium text">Enregistrer</button>
        </form>
    </div>
@endunless