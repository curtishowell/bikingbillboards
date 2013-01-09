
var currentCaseIndex = 0;
var cases = ['case_pemco', 'case_tmobile']
var numCases = cases.length

$(function() { //dom ready
	$('#next_case').click(function(){
		moveCase(1)
	})
	

	$('#previous_case').click(function(){
		moveCase(-1)
	})

})


function moveCase(increment){
	
	var newCaseIndex = ( Math.abs( currentCaseIndex + increment) ) % numCases

	var oldCase = $( '#' + cases[currentCaseIndex] )
	var newCase = $( '#' + cases[newCaseIndex] )

	currentCaseIndex = newCaseIndex
	
	oldCase.fadeOut('fast', function(){
		newCase.fadeIn('medium')
	})
}





/*
function moveCase(increment){
	var newCaseIndex = (currentCaseIndex + increment) % numCases
	
	currentCaseIndex = newCaseIndex
	
	var oldCaseHeader = $('.shown_case_header')
	oldCaseHeader.fadeOut('fast', function(){
		oldCaseHeader.removeClass('shown_case_header')
		oldCaseHeader.addClass('hidden_case_header')
		showNewHeader(newCaseIndex)
	})
	

}

function showNewHeader(newCaseIndex){
	var headerName = '#' + cases[newCaseIndex] + '_header'
	var newHeader = $(headerName)
	
	
	newHeader.fadeIn('medium', function(){
		newHeader.removeClass('hidden_case_header')
		newHeader.addClass('shown_case_header')
	})
	
}


function showNewStats(newCaseIndex){
	var statsName = '#' + cases[newCaseIndex] + '_stats'
	var newStats = $(statsName)
	
	
	newStats.fadeIn('medium', function(){
		newStats.removeClass('hidden_case_stats')
		newStats.addClass('shown_case_stats')
	})
	
}
*/