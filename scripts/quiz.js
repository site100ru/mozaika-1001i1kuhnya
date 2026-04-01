function nextQuostion( curQuo ) {
	let currentQuostion = curQuo; // Текущий вопрос
	
	switch( currentQuostion ) {
		
		/* ПЕРВЫЙ ОБЩИЙ ВОПРОС */
		case '1': // Первый вопрос
			/* Проверяем что выбрана одна из планировок */
			if ( ( document.getElementById( 'answer-1-1' ).checked == false ) && ( document.getElementById( 'answer-1-2' ).checked == false ) && ( document.getElementById( 'answer-1-3' ).checked == false ) ) {
				alert( 'Для продолжения выберите тип мебели' );
				return false;
			}
			
			// Получаем ответ на первый вопрос и добавляем в input в форме обратной связи
			answer1 = document.querySelector( 'input[name="quostion-1"]:checked' ).value;
			document.getElementById( 'answer1-1' ).value = answer1;
			document.getElementById( 'answer1-2' ).value = answer1;
			
			// Скрываем блок текущего вопроса и открываем блок следующего
			document.getElementById( '1' ).style.display = 'none';
			
			/* В зависимости от ответа скрываем блок текущего вопроса и открываем блок следующего */
			if ( answer1 == 'Кухня' ) {
				document.getElementById( '2-1' ).style.display = 'block';
			} else if ( answer1 == 'Шкаф или гардеробная' ) {
				document.getElementById( '2-2' ).style.display = 'block';
			} else if ( answer1 == 'Другая корпусная мебель' ) {
				document.getElementById( '2-3' ).style.display = 'block';
			}
		break;
		/* END ПЕРВЫЙ ОБЩИЙ ВОПРОС */
		
		
		/* ВОПРОСЫ ПО КУХНЯМ */
		case '2-1':
			/* Проверяем что выбрана планировка кухни */
			if ( ( document.getElementById( 'answer-2-1-1' ).checked == false ) && ( document.getElementById( 'answer-2-1-2' ).checked == false ) && ( document.getElementById( 'answer-2-1-3' ).checked == false ) && ( document.getElementById( 'answer-2-1-4' ).checked == false ) ) {
				alert( 'Для продолжения выберите планировку кухни' );
				return false;
			}
			
			/* Получаем и записываем первый ответ в переменную*/
			answer2 = document.querySelector( 'input[name="quostion-2-1"]:checked' ).value;
			document.getElementById( 'answer2-1' ).value = answer2;
			
			// Скрываем блок текущего вопроса и открываем блок следующего
			document.getElementById( '2-1' ).style.display = 'none';
			
			/* В зависимости от ответа скрываем блок текущего вопроса и открываем блок следующего */
			if ( answer2 == 'Прямая' ) {
				document.getElementById( '3-1-1' ).style.display = 'block';
			} else if ( answer2 == 'Угловая' ) {
				document.getElementById( '3-1-2' ).style.display = 'block';
			} else if ( answer2 == 'П-образная' ) {
				document.getElementById( '3-1-3' ).style.display = 'block';
			} else if ( answer2 == 'С островком' ) {
				document.getElementById( '3-1-4' ).style.display = 'block';
			}
		break;
		
		case '3-1-1':
			/* Проверяем что все необходимые размеры указаны */
			if ( ( document.getElementById( 'answer-3-1-1-1' ).value == ''  ) ) {
				alert( 'Для продолжения укажите все необходимые размеры' );
				return false;
			} 
			
			/* Получаем и записываем в переменную второй ответ
			answer2_1 = document.getElementById( 'answer-2-2-1' ).value;
			answer2_2 = document.getElementById( 'answer-2-2-2' ).value;
			answer2_3 = '';*/
			
			// Получаем и записываем в переменную второй ответ
			answer3_1 = document.getElementById( 'answer-3-1-1-1' ).value;
			document.getElementById( 'answer3-1-1' ).value = answer3_1;
			
			// Скрываем блок текущего вопроса и открываем блок следующего
			document.getElementById( '3-1-1' ).style.display = 'none';
			document.getElementById( '4-1' ).style.display = 'block';
		break;
		
		case '3-1-2':
			/* Проверяем что все необходимые размеры указаны */
			if ( ( document.getElementById( 'answer-3-1-1-2' ).value == ''  ) || ( document.getElementById( 'answer-3-1-2-2' ).value == ''  ) ) {
				alert( 'Для продолжения укажите все необходимые размеры' );
				return false;
			} 
			
			// Получаем и записываем в переменную второй ответ
			answer3_1 = document.getElementById( 'answer-3-1-1-2' ).value;
			answer3_2 = document.getElementById( 'answer-3-1-2-2' ).value;
			document.getElementById( 'answer3-1-1' ).value = answer3_1;
			document.getElementById( 'answer3-1-2' ).value = answer3_2;
			
			// Скрываем блок текущего вопроса и открываем блок следующего
			document.getElementById( '3-1-2' ).style.display = 'none';
			document.getElementById( '4-1' ).style.display = 'block';
		break;
		
		case '3-1-3':
			/* Проверяем что все необходимые размеры указаны */
			if ( ( document.getElementById( 'answer-3-1-1-3' ).value == ''  ) || ( document.getElementById( 'answer-3-1-2-3' ).value == ''  ) || ( document.getElementById( 'answer-3-1-3-3' ).value == ''  ) ) {
				alert( 'Для продолжения укажите все необходимые размеры' );
				return false;
			}
			
			// Получаем и записываем в переменную второй ответ
			answer3_1 = document.getElementById( 'answer-3-1-1-3' ).value;
			answer3_2 = document.getElementById( 'answer-3-1-2-3' ).value;
			answer3_3 = document.getElementById( 'answer-3-1-3-3' ).value;
			document.getElementById( 'answer3-1-1' ).value = answer3_1;
			document.getElementById( 'answer3-1-2' ).value = answer3_2;
			document.getElementById( 'answer3-1-3' ).value = answer3_3;
			
			// Скрываем блок текущего вопроса и открываем блок следующего
			document.getElementById( '3-1-3' ).style.display = 'none';
			document.getElementById( '4-1' ).style.display = 'block';
		break;
		
		case '3-1-4':
			/* Проверяем что все необходимые размеры указаны */
			if ( ( document.getElementById( 'answer-3-1-1-4' ).value == ''  ) || ( document.getElementById( 'answer-3-1-2-4' ).value == ''  ) || ( document.getElementById( 'answer-3-1-3-4' ).value == ''  ) || ( document.getElementById( 'answer-3-1-4-4' ).value == ''  ) ) {
				alert( 'Для продолжения укажите все необходимые размеры' );
				return false;
			}
			
			// Получаем и записываем в переменную второй ответ
			answer3_1 = document.getElementById( 'answer-3-1-1-4' ).value;
			answer3_2 = document.getElementById( 'answer-3-1-2-4' ).value;
			answer3_3 = document.getElementById( 'answer-3-1-3-4' ).value;
			answer3_4 = document.getElementById( 'answer-3-1-4-4' ).value;
			// Добавляем переменные в инпуты для отправки в форме
			document.getElementById( 'answer3-1-1' ).value = answer3_1;
			document.getElementById( 'answer3-1-2' ).value = answer3_2;
			document.getElementById( 'answer3-1-3' ).value = answer3_3;
			document.getElementById( 'answer3-1-4' ).value = answer3_4;
			
			// Скрываем блок текущего вопроса и открываем блок следующего
			document.getElementById( '3-1-4' ).style.display = 'none';
			document.getElementById( '4-1' ).style.display = 'block';
		break;
		
		case '4-1':
			/* Проверяем что все необходимые значения указаны */
			if ( ( document.getElementById( 'answer-4-1-1' ).checked == false ) && ( document.getElementById( 'answer-4-1-2' ).checked == false ) && ( document.getElementById( 'answer-4-1-3' ).checked == false ) && ( document.getElementById( 'answer-4-1-4' ).checked == false ) ) {
				alert( 'Для продолжения выберите стиль кухни' );
				return false;
			}
			
			// Получаем и записываем в переменную второй ответ
			answer4 = document.querySelector( 'input[name="quostion-4-1"]:checked' ).value;
			document.getElementById( 'answer4-1' ).value = answer4;
			
			// Скрываем блок текущего вопроса и открываем блок следующего
			document.getElementById( '4-1' ).style.display = 'none';
			document.getElementById( '5-1' ).style.display = 'block';
		break;
		
		case '5-1':
			/* Проверяем что все необходимые значения указаны */
			if ( ( document.getElementById( 'answer-5-1-1' ).checked == false ) && ( document.getElementById( 'answer-5-1-2' ).checked == false ) && ( document.getElementById( 'answer-5-1-3' ).checked == false ) && ( document.getElementById( 'answer-5-1-4' ).checked == false ) && ( document.getElementById( 'answer-5-1-5' ).checked == false ) && ( document.getElementById( 'answer-5-1-6' ).checked == false ) ) {
				alert( 'Для продолжения выберите материал фасада' );
				return false;
			}
			
			// Получаем и записываем в переменную второй ответ
			answer5 = document.querySelector( 'input[name="quostion-5-1"]:checked' ).value;
			document.getElementById( 'answer5-1' ).value = answer5;
			
			// Скрываем блок текущего вопроса и открываем блок следующего
			document.getElementById( '5-1' ).style.display = 'none';
			document.getElementById( '6-1' ).style.display = 'block';
		break;
		
		case '6-1':
			/* Проверяем что все необходимые значения указаны */
			if ( ( document.getElementById( 'answer-6-1-1' ).checked == false ) && ( document.getElementById( 'answer-6-1-2' ).checked == false ) && ( document.getElementById( 'answer-6-1-3' ).checked == false ) ) {
				alert( 'Для продолжения выберите желаемый подарок' );
				return false;
			}
			
			// Получаем и записываем в переменную второй ответ
			answer6 = document.querySelector( 'input[name="quostion-6-1"]:checked' ).value;
			document.getElementById( 'answer6-1' ).value = answer6;
			
			// Скрываем блок текущего вопроса и открываем блок следующего
			document.getElementById( '6-1' ).style.display = 'none';
			document.getElementById( '7-1' ).style.display = 'block';
		break;
		/* END ВОПРОСЫ ПО КУХНЯМ */
		
		
		/* ВОПРОСЫ ПО ШКАФАМ */
		case '2-2': // Второй вопрос по шкафам
			/* Проверяем что выбран тип шкафа */
			if ( ( document.getElementById( 'answer-2-2-1' ).checked == false ) && ( document.getElementById( 'answer-2-2-2' ).checked == false ) && ( document.getElementById( 'answer-2-2-3' ).checked == false ) && ( document.getElementById( 'answer-2-2-4' ).checked == false ) && ( document.getElementById( 'answer-2-2-5' ).checked == false ) && ( document.getElementById( 'answer-2-2-6' ).checked == false ) ) {
				alert( 'Для продолжения выберите тип шкафа' );
				return false;
			}
			
			/* Получаем и записываем первый ответ в переменную*/
			answer2 = document.querySelector( 'input[name="quostion-2-2"]:checked' ).value;
			document.getElementById( 'answer2-2' ).value = answer2;
			
			// Получаем ответ на второй вопрос и добавляем в input в форме обратной связи
			//document.getElementById( 'answer2' ).value = document.querySelector( 'input[name="quostion-2"]:checked' ).value;
			
			// Скрываем блок текущего вопроса и открываем блок следующего
			document.getElementById( '2-2' ).style.display = 'none';
			document.getElementById( '3-2' ).style.display = 'block';
		break; // Конец второго вопроса
		
		case '3-2': // Второй вопрос по шкафам
			/* Проверяем что выбран тип шкафа */
			if ( ( document.getElementById( 'answer-3-2-1' ).checked == false ) && ( document.getElementById( 'answer-3-2-2' ).checked == false ) && ( document.getElementById( 'answer-3-2-3' ).checked == false ) && ( document.getElementById( 'answer-3-2-4' ).checked == false ) && ( document.getElementById( 'answer-3-2-5' ).checked == false ) && ( document.getElementById( 'answer-3-2-6' ).checked == false ) ) {
				alert( 'Для продолжения выберите внешний вид фасада' );
				return false;
			}
			
			/* Получаем и записываем первый ответ в переменную*/
			answer3 = document.querySelector( 'input[name="quostion-3-2"]:checked' ).value;
			document.getElementById( 'answer3-2' ).value = answer3;
			
			// Получаем ответ на второй вопрос и добавляем в input в форме обратной связи
			//document.getElementById( 'answer2' ).value = document.querySelector( 'input[name="quostion-2"]:checked' ).value;
			
			// Скрываем блок текущего вопроса и открываем блок следующего
			document.getElementById( '3-2' ).style.display = 'none';
			document.getElementById( '4-2' ).style.display = 'block';
		break;
		
		case '4-2': // Четвертый вопрос по шкафам
			/* Проверяем что выбран тип шкафа */
			if ( ( document.getElementById( 'answer-4-2-1' ).checked == false ) && ( document.getElementById( 'answer-4-2-2' ).checked == false ) && ( document.getElementById( 'answer-4-2-3' ).checked == false ) && ( document.getElementById( 'answer-4-2-4' ).checked == false ) && ( document.getElementById( 'answer-4-2-5' ).checked == false ) && ( document.getElementById( 'answer-4-2-6' ).checked == false ) && ( document.getElementById( 'answer-4-2-7' ).checked == false ) && ( document.getElementById( 'answer-4-2-8' ).checked == false ) && ( document.getElementById( 'answer-4-2-9' ).checked == false ) && ( document.getElementById( 'answer-4-2-10' ).checked == false ) ) {
				alert( 'Для продолжения выберите ориентировочную ширину шкафа' );
				return false;
			}
			
			/* Получаем и записываем первый ответ в переменную*/
			answer4 = document.querySelector( 'input[name="quostion-4-2"]:checked' ).value;
			document.getElementById( 'answer4-2' ).value = answer4;
			
			// Получаем ответ на второй вопрос и добавляем в input в форме обратной связи
			//document.getElementById( 'answer2' ).value = document.querySelector( 'input[name="quostion-2"]:checked' ).value;
			
			// Скрываем блок текущего вопроса и открываем блок следующего
			document.getElementById( '4-2' ).style.display = 'none';
			document.getElementById( '5-2' ).style.display = 'block';
		break;
		
		case '5-2': // Четвертый вопрос по шкафам
			/* Проверяем что выбран тип шкафа */
			if ( ( document.getElementById( 'answer-5-2-1' ).checked == false ) && ( document.getElementById( 'answer-5-2-2' ).checked == false ) && ( document.getElementById( 'answer-5-2-3' ).checked == false ) && ( document.getElementById( 'answer-5-2-4' ).checked == false ) && ( document.getElementById( 'answer-5-2-5' ).checked == false ) && ( document.getElementById( 'answer-5-2-6' ).checked == false ) ) {
				alert( 'Для продолжения выберите количество дверей' );
				return false;
			}
			
			/* Получаем и записываем первый ответ в переменную*/
			answer5 = document.querySelector( 'input[name="quostion-5-2"]:checked' ).value;
			document.getElementById( 'answer5-2' ).value = answer5;
			
			// Получаем ответ на второй вопрос и добавляем в input в форме обратной связи
			//document.getElementById( 'answer2' ).value = document.querySelector( 'input[name="quostion-2"]:checked' ).value;
			
			// Скрываем блок текущего вопроса и открываем блок следующего
			document.getElementById( '5-2' ).style.display = 'none';
			document.getElementById( '6-2' ).style.display = 'block';
		break;
		
		case '6-2': // Четвертый вопрос по шкафам
			/* Проверяем что выбран тип шкафа */
			if ( ( document.getElementById( 'answer-6-2-1' ).checked == false ) && ( document.getElementById( 'answer-6-2-2' ).checked == false ) && ( document.getElementById( 'answer-6-2-4' ).checked == false ) ) {
				alert( 'Для продолжения выберите желаемый подарок' );
				return false;
			}
			
			/* Получаем и записываем первый ответ в переменную*/
			answer6 = document.querySelector( 'input[name="quostion-6-2"]:checked' ).value;
			document.getElementById( 'answer6-2' ).value = answer6;
			
			// Получаем ответ на второй вопрос и добавляем в input в форме обратной связи
			//document.getElementById( 'answer2' ).value = document.querySelector( 'input[name="quostion-2"]:checked' ).value;
			
			// Скрываем блок текущего вопроса и открываем блок следующего
			document.getElementById( '6-2' ).style.display = 'none';
			document.getElementById( '7-2' ).style.display = 'block';
		break;
		/* END ВОПРОСЫ ПО ШКАФАМ */
		
		
		/*
		case '6':
			/* Проверяем что все данные введены *
			if ( ( document.getElementById( 'answer-6-1' ).value == ''  ) || ( document.getElementById( 'answer-6-2' ).value == ''  ) ) {
				alert( 'Для продолжения введите Ваше имя и телефон' );
				return false;
			}
			
			/* Получаем и записываем в переменную второй ответ
			name = document.getElementById( 'answer-6-1' ).value;
			tel = document.getElementById('answer-6-2').value; */
			
			// Скрываем блок текущего вопроса и открываем блок следующего
			//document.getElementById( '2' ).style.display = 'none';
			//document.getElementById( '1' ).style.display = 'block';
			
			/*
			$.ajax({
				type: 'POST',
				url: 'action.php',
				dataType: 'html',
				data: {
					'answer1' : answer1,
					'answer2' : answer2,
					//'answer2_1' : answer2_1, 'answer2_2' : answer2_2, 'answer2_3' : answer2_3,
					'answer3' : answer3,
					'answer4' : answer4,
					'answer5' : answer5,
					'name' : name, 'tel' : tel
				},
				success: function( data ) {
					//location.reload();
				}
			});
			location.reload(); */
			
		break;
	}
}


function previousQuostion( curQuo ) {

	let currentQuostion = curQuo; // Текущий вопрос
	switch( currentQuostion ) {
		
		/* KITCHEN */
		case '2-1': // Третий вопрос
			// Скрываем блок текущего вопроса и открываем блок предыдущего
			document.getElementById( '2-1' ).style.display = 'none';
			document.getElementById( '1' ).style.display = 'block';
		break; // Конец третьего вопроса
		
		case '3-1-1': // Третий вопрос
			// Скрываем блок текущего вопроса и открываем блок предыдущего
			document.getElementById( '3-1-1' ).style.display = 'none';
			document.getElementById( '2-1' ).style.display = 'block';
		break; // Конец третьего вопроса
		
		case '3-1-2': // Третий вопрос
			// Скрываем блок текущего вопроса и открываем блок предыдущего
			document.getElementById( '3-1-2' ).style.display = 'none';
			document.getElementById( '2-1' ).style.display = 'block';
		break; // Конец третьего вопроса
		
		case '3-1-3': // Третий вопрос
			// Скрываем блок текущего вопроса и открываем блок предыдущего
			document.getElementById( '3-1-3' ).style.display = 'none';
			document.getElementById( '2-1' ).style.display = 'block';
		break; // Конец третьего вопроса
		
		case '3-1-4': // Третий вопрос
			// Скрываем блок текущего вопроса и открываем блок предыдущего
			document.getElementById( '3-1-4' ).style.display = 'none';
			document.getElementById( '2-1' ).style.display = 'block';
		break; // Конец третьего вопроса
		
		case '4-1':
			// Скрываем блок текущего вопроса и открываем блок предыдущего
			document.getElementById( '4-1' ).style.display = 'none';
			if ( document.getElementById( 'answer-2-1-1' ).checked == true ) {
				document.getElementById( '3-1-1' ).style.display = 'block';
			} else if ( document.getElementById( 'answer-2-1-2' ).checked == true ) {
				document.getElementById( '3-1-2' ).style.display = 'block';
			} else if ( document.getElementById( 'answer-2-1-3' ).checked == true ) {
				document.getElementById( '3-1-3' ).style.display = 'block';
			} else if ( document.getElementById( 'answer-2-1-4' ).checked == true ) {
				document.getElementById( '3-1-4' ).style.display = 'block';
			}
		break; // Конец третьего вопроса
		
		case '5-1': // Третий вопрос
			// Скрываем блок текущего вопроса и открываем блок предыдущего
			document.getElementById( '5-1' ).style.display = 'none';
			document.getElementById( '4-1' ).style.display = 'block';
		break; // Конец третьего вопроса
		
		case '6-1': // Третий вопрос
			// Скрываем блок текущего вопроса и открываем блок предыдущего
			document.getElementById( '6-1' ).style.display = 'none';
			document.getElementById( '5-1' ).style.display = 'block';
		break; // Конец третьего вопроса
		
		case '7-1': // Третий вопрос
			// Скрываем блок текущего вопроса и открываем блок предыдущего
			document.getElementById( '7-1' ).style.display = 'none';
			document.getElementById( '6-1' ).style.display = 'block';
		break; // Конец третьего вопроса
		/* END KITCHEN */
		
		
		/* SHKAFY */
		case '2-2': // Третий вопрос
			// Скрываем блок текущего вопроса и открываем блок предыдущего
			document.getElementById( '2-2' ).style.display = 'none';
			document.getElementById( '1' ).style.display = 'block';
		break; // Конец третьего вопроса
		
		case '3-2': // Второй вопрос
			// Скрываем блок текущего вопроса и открываем блок предыдущего
			document.getElementById( '3-2' ).style.display = 'none';
			document.getElementById( '2-2' ).style.display = 'block';
		break; // Конец второго вопроса
		
		case '4-2': // Второй вопрос
			// Скрываем блок текущего вопроса и открываем блок предыдущего
			document.getElementById( '4-2' ).style.display = 'none';
			document.getElementById( '3-2' ).style.display = 'block';
		break; // Конец второго вопроса
		
		case '5-2': // Второй вопрос
			// Скрываем блок текущего вопроса и открываем блок предыдущего
			document.getElementById( '5-2' ).style.display = 'none';
			document.getElementById( '4-2' ).style.display = 'block';
		break; // Конец второго вопроса
		
		case '6-2': // Второй вопрос
			// Скрываем блок текущего вопроса и открываем блок предыдущего
			document.getElementById( '6-2' ).style.display = 'none';
			document.getElementById( '5-2' ).style.display = 'block';
		break; // Конец второго вопроса
		
		case '7-2': // Второй вопрос
			// Скрываем блок текущего вопроса и открываем блок предыдущего
			document.getElementById( '7-2' ).style.display = 'none';
			document.getElementById( '6-2' ).style.display = 'block';
		break; // Конец второго вопроса
		/* END SHKAFY */
		
		
		/* OTHER FURNITURE */
		case '2-3':
			// Скрываем блок текущего вопроса и открываем блок предыдущего
			document.getElementById( '2-3' ).style.display = 'none';
			document.getElementById( '1' ).style.display = 'block';
		break;
		/* END OTHER FURNITURE */
	}
}