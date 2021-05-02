import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { RatingTypeComponent } from './rating-type.component';

const routes: Routes = [
	{
		path : '',
		component : RatingTypeComponent
	}
];


@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class RatingTypeRoutingModule { }
