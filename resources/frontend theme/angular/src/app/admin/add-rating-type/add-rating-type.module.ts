import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { DataTablesModule } from 'angular-datatables';
import { AddRatingTypeRoutingModule } from './add-rating-type-routing.module';
import { AddRatingTypeComponent } from './add-rating-type.component';


@NgModule({
  declarations: [AddRatingTypeComponent],
  imports: [
    CommonModule,
    AddRatingTypeRoutingModule,
    DataTablesModule
  ]
})
export class AddRatingTypeModule { }
