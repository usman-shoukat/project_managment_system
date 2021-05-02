import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { BookServiceComponent } from './book-service.component';
import { BookServiceRoutingModule } from './book-service-routing.module';
import { NgSelect2Module } from 'ng-select2';

@NgModule({
  declarations: [ BookServiceComponent ],
  imports: [
    CommonModule,
    BookServiceRoutingModule,
    NgSelect2Module
  ]
})
export class BookServiceModule { }
