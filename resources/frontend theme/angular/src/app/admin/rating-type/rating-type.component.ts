import { Component, OnInit } from '@angular/core';
import { CommonServiceService } from '../../common-service.service';

@Component({
  selector: 'app-rating-type',
  templateUrl: './rating-type.component.html',
  styleUrls: ['./rating-type.component.css'],
})
export class RatingTypeComponent implements OnInit {
  ratings: any = [];
  errorMessage: string;

  constructor( public commonService: CommonServiceService ) {}

  ngOnInit(): void {
    this.getRatings();
  }

  getRatings() {
    this.commonService.getRatings().subscribe(
      (res) => {
        this.ratings = res;
        $(function () {
          $('table').DataTable();
        });
      },
      (error) => (this.errorMessage = <any>error)
    );
  }  
}
