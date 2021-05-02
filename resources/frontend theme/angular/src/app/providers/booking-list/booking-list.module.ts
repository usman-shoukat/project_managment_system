import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { BookingListRoutingModule } from './booking-list-routing.module';
import { BookingListComponent } from './booking-list.component';
import { ModalModule } from 'ngx-bootstrap/modal';
import { NgSelect2Module } from 'ng-select2';

@NgModule({
  declarations: [BookingListComponent],
  imports: [
    CommonModule,
    BookingListRoutingModule,
    NgSelect2Module,
    ModalModule.forRoot(),
  ],
})
export class BookingListModule {}
